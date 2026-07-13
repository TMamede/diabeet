# SIPEDIA

> Sistema Integrado ao Processo de Enfermagem — Pé Diabético

Aplicação web para apoio ao processo de enfermagem no cuidado de pacientes com
diabetes / pé diabético: cadastro de pacientes, questionários (autocuidado e
qualidade de vida), prontuários com diagnósticos e intervenções, e geração de
prontuário em PDF.

- **Framework:** Laravel 11 (PHP 8.2+)
- **UI dinâmica:** Livewire 3 + Livewire Volt
- **Banco:** PostgreSQL 16
- **PDF:** barryvdh/laravel-dompdf
- **Build front-end:** Vite + Tailwind CSS

---

## Sumário

- [Tecnologias](#tecnologias)
- [Requisitos](#requisitos)
- [Instalação](#instalação)
- [Configuração (.env)](#configuração-env)
- [Banco de Dados](#banco-de-dados)
- [Docker](#docker)
- [Desenvolvimento](#desenvolvimento)
- [Produção](#produção)
- [Estrutura do Projeto](#estrutura-do-projeto)
- [Comandos úteis](#comandos-úteis)
- [Atualização](#atualização)
- [Solução de Problemas](#solução-de-problemas)
- [FAQ](#faq)
- [Checklist final](#checklist-final)

---

## Tecnologias

| Camada        | Tecnologia                                   |
|---------------|----------------------------------------------|
| Back-end      | Laravel 11, PHP 8.2+                          |
| Interatividade| Livewire 3, Livewire Volt 1                  |
| Banco         | PostgreSQL 16                                |
| PDF           | barryvdh/laravel-dompdf 3                     |
| E-mail (reset)| Mailpit (via API HTTP) / SMTP                |
| Front-end     | Vite 5, Tailwind CSS 3, PostCSS, autoprefixer|
| HTTP client   | Guzzle 7                                      |
| Testes        | Pest 3, PHPUnit, Laravel Dusk                |

> **Nota sobre o front-end:** os layouts carregam Tailwind pela **Play CDN**
> (`https://cdn.tailwindcss.com`) e também jQuery + Select2 por CDN. O build do
> Vite hoje é obrigatório apenas porque a diretiva `@vite` está presente nos
> layouts — veja [FAQ](#faq).

---

## Requisitos

- PHP **8.2+** com extensões: `pdo_pgsql`, `mbstring`, `openssl`, `dom`, `gd`
  (recomendada para o DomPDF), `fileinfo`, `ctype`, `bcmath`
- Composer 2.x
- PostgreSQL 16 (local **ou** via Docker)
- Git
- **Opcional:** Node.js 20+ e NPM (necessário apenas se você mantiver a diretiva
  `@vite` — veja [FAQ](#faq))
- **Opcional:** Docker + Docker Compose (apenas para subir o PostgreSQL)
- **Opcional:** Mailpit (para testar o reset de senha localmente)

---

## Instalação

```bash
# 1. Clonar
git clone https://github.com/TMamede/diabeet.git
cd diabeet

# 2. Criar o arquivo de ambiente
cp .env.example .env

# 3. Dependências PHP
composer install

# 4. Dependências front-end (só se mantiver @vite nos layouts)
npm install

# 5. Gerar a APP_KEY (obrigatório — sem ela a aplicação não sobe)
php artisan key:generate

# 6. Subir o banco (se usar Docker) e rodar as migrations + seed inicial
docker compose up -d
php artisan migrate --seed

# 7. Link do storage (fotos de perfil / uploads)
php artisan storage:link

# 8. Build do front-end (só se mantiver @vite)
npm run build

# 9. Rodar em desenvolvimento
php artisan serve
```

Acesse: <http://127.0.0.1:8000>

> ⚠️ **`--seed` só no primeiro provisionamento.** Os seeders populam tabelas de
> referência (questionários, diagnósticos, intervenções) **e criam um usuário
> administrador padrão**. Rodar `db:seed` de novo tenta recriar esse usuário e
> falha (e-mail único). Em atualizações use apenas `php artisan migrate`.

---

## Configuração (.env)

O `.env.example` distribuído contém **apenas** as variáveis de banco. Abaixo um
`.env` mínimo funcional recomendado — ajuste conforme o ambiente:

```env
APP_NAME=SIPEDIA
APP_ENV=local
APP_KEY=            # preenchido por: php artisan key:generate
APP_DEBUG=true      # false em produção
APP_URL=http://127.0.0.1:8000
APP_LOCALE=pt

# Banco
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=diabeet
DB_USERNAME=postgres
DB_PASSWORD=troque-esta-senha    # NÃO deixe vazio (o Postgres do Docker recusa senha vazia)

# Sessão / cache / fila (padrões usam o banco de dados)
SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database

# E-mail (reset de senha)
MAIL_MAILER=log
MAIL_FROM_ADDRESS=sipedia@unimontes.br
MAIL_FROM_NAME=SIPEDIA
# O reset de senha usa a API HTTP do Mailpit:
MAILPIT_API_URL=http://127.0.0.1:8025/api/v1/send
```

Variáveis relevantes deste projeto:

| Variável           | Função                                                             |
|--------------------|--------------------------------------------------------------------|
| `APP_KEY`          | Chave de criptografia. **Obrigatória** — sem ela a app não sobe.   |
| `APP_DEBUG`        | `true` em dev, **`false` em produção**.                            |
| `SESSION_DRIVER`   | Padrão `database` → exige a tabela `sessions` (via migrations).    |
| `CACHE_STORE`      | Padrão `database` → exige a tabela `cache`.                        |
| `QUEUE_CONNECTION` | Padrão `database` → exige a tabela `jobs`.                         |
| `MAILPIT_API_URL`  | Endpoint usado pelo fluxo de **reset de senha**.                   |

---

## Banco de Dados

- Conexão padrão: **PostgreSQL** (`DB_CONNECTION=pgsql`).
- Sessão, cache e fila usam o driver `database` por padrão — por isso as
  migrations **precisam** rodar antes do primeiro login (tabela `sessions`).

```bash
php artisan migrate          # cria o schema
php artisan migrate --seed   # cria o schema + dados de referência (1ª vez)
php artisan migrate:fresh --seed   # DESTRÓI tudo e recria (somente dev)
```

**Usuário administrador padrão** criado pelo seed (troque a senha após o
primeiro acesso, e altere as credenciais antes de qualquer ambiente exposto):

- E-mail: `gestor@master.com`
- Senha: `patinho`

---

## Docker

O `docker-compose.yml` sobe **apenas o PostgreSQL** — a aplicação Laravel roda
fora do container.

```bash
docker compose up -d      # sobe o banco (container: diabeet_db)
docker compose ps         # status
docker compose logs -f postgres
docker compose down       # para o banco (mantém o volume de dados)
docker compose down -v    # para e APAGA os dados
```

O Compose lê `DB_DATABASE`, `DB_USERNAME` e `DB_PASSWORD` do seu `.env`.

> ⚠️ **A imagem oficial do Postgres recusa senha vazia.** Se `DB_PASSWORD`
> estiver em branco, o container não inicializa. Defina uma senha **ou** adicione
> `POSTGRES_HOST_AUTH_METHOD=trust` ao serviço (apenas para uso local).

---

## Desenvolvimento

```bash
php artisan serve         # servidor de desenvolvimento (http://127.0.0.1:8000)
npm run dev               # Vite em modo watch/HMR (processo que fica aberto)
php artisan optimize:clear # limpa caches quando alterar .env/config
```

- **Não** rode `php artisan optimize` / `config:cache` em desenvolvimento: os
  valores do `.env` ficam “congelados” em cache e alterações param de surtir
  efeito até `optimize:clear`.
- Testes:

```bash
php artisan test          # Pest / PHPUnit
./vendor/bin/pint         # formatação (code style)
```

---

## Produção

Ambiente Ubuntu com Nginx + PHP-FPM apontando para `public/`. **Não** use
`php artisan serve` em produção.

```bash
# 1. Código
git clone <repo> && cd diabeet

# 2. Ambiente
cp .env.example .env
# edite: APP_ENV=production, APP_DEBUG=false, APP_URL=https://seu-dominio,
#        credenciais de banco, e-mail etc.

# 3. Dependências PHP (sem pacotes de dev, autoloader otimizado)
composer install --no-dev --optimize-autoloader --no-interaction

# 4. Chave (se ainda não houver APP_KEY)
php artisan key:generate --force

# 5. Migrations (sem prompt interativo)
php artisan migrate --force
# Apenas no PRIMEIRO deploy, para carregar dados de referência + admin:
php artisan db:seed --force

# 6. Storage
php artisan storage:link

# 7. Front-end (obrigatório enquanto houver @vite nos layouts)
npm ci && npm run build

# 8. Caches de produção
php artisan config:cache
php artisan route:cache
php artisan view:cache
# (equivalente: php artisan optimize)

# 9. Permissões (usuário do servidor web)
sudo chown -R www-data:www-data storage bootstrap/cache
```

Checklist de segurança em produção:

- `APP_DEBUG=false` e `APP_ENV=production`.
- HTTPS ativo + `SESSION_SECURE_COOKIE=true`.
- **Troque a senha do usuário `gestor@master.com`** (ou não rode o seed de admin).
- Não exponha a porta `5432` do Postgres à internet.
- Configure um mailer real (ou um endpoint compatível com a API do Mailpit) para
  o reset de senha funcionar — veja [FAQ](#faq).

### Comandos por ambiente

| Comando                          | Desenvolvimento | Produção |
|----------------------------------|:---------------:|:--------:|
| `composer install`               | ✅ (com dev)     | `--no-dev --optimize-autoloader` |
| `php artisan key:generate`       | ✅ (1ª vez)      | ✅ (1ª vez) |
| `php artisan migrate`            | ✅               | ✅ (`--force`) |
| `php artisan db:seed`            | ✅ (1ª vez)      | ✅ (1ª vez, `--force`) |
| `php artisan storage:link`       | ✅               | ✅ |
| `npm run build`                  | opcional*       | ✅ (enquanto houver `@vite`) |
| `npm run dev`                    | ✅ (watch)       | ❌ nunca |
| `php artisan serve`              | ✅               | ❌ (use Nginx/PHP-FPM) |
| `php artisan optimize`           | ❌               | ✅ |

\* Em dev, `npm run dev` (watch) ou `npm run build` (uma vez) satisfazem a
diretiva `@vite`.

---

## Estrutura do Projeto

```
app/
  Http/Controllers/      # Controllers (ex.: ProntuarioPDFController)
  Livewire/              # Componentes Livewire (Pacientes, Prontuarios, Questionarios…)
  Models/                # ~130 models de domínio
  Services/MailpitHttp   # Envio de e-mail via API HTTP do Mailpit
  Helpers/Badword        # Validação "no_badwords"
bootstrap/app.php        # Bootstrap do Laravel 11 (rotas, middleware, health /up)
config/                  # Configurações (pgsql, session/cache/queue = database)
database/
  migrations/            # Schema completo do domínio
  seeders/               # Dados de referência + usuário admin
resources/
  views/                 # Blades + componentes + views Livewire/Volt + PDF
  css/app.css, js/app.js # Entradas do Vite
routes/
  web.php                # Rotas da aplicação
  auth.php               # Rotas de autenticação (Volt)
public/                  # Front controller + assets estáticos (logos, svg)
docker-compose.yml       # PostgreSQL
```

---

## Comandos úteis

```bash
php artisan route:list                # lista todas as rotas
php artisan migrate:status            # status das migrations
php artisan optimize:clear            # limpa config/route/view/cache
php artisan tinker                    # REPL
php artisan storage:link             # (re)cria o link público de storage
docker compose logs -f postgres       # logs do banco
```

---

## Atualização

```bash
git pull
composer install --no-dev --optimize-autoloader   # produção
php artisan migrate --force                        # NÃO use --seed aqui
npm ci && npm run build                            # se mantiver @vite
php artisan optimize:clear && php artisan optimize
```

---

## Solução de Problemas

| Sintoma | Causa provável | Solução |
|---|---|---|
| `No application encryption key has been specified` | `APP_KEY` vazio | `php artisan key:generate` |
| `Unable to locate file in Vite manifest` | `@vite` presente mas sem build | `npm run build` (ou remova `@vite`) — veja FAQ |
| Container do banco não sobe | `DB_PASSWORD` vazio | defina uma senha ou `POSTGRES_HOST_AUTH_METHOD=trust` |
| Erro de tabela `sessions`/`cache`/`jobs` | migrations não rodaram | `php artisan migrate` |
| Fotos de perfil não aparecem | falta o link de storage | `php artisan storage:link` |
| Alterei o `.env` e nada muda | config em cache | `php artisan optimize:clear` |
| Reset de senha não chega | Mailpit indisponível | suba o Mailpit ou ajuste `MAILPIT_API_URL` — veja FAQ |

---

## FAQ

**Preciso mesmo do Node/NPM?**
Hoje **sim**, mas apenas porque os layouts contêm a diretiva `@vite(...)`. Em
produção, se `@vite` estiver presente e não houver build (`public/build/manifest.json`),
o Laravel lança `ViteManifestNotFoundException`. Como o Tailwind é carregado pela
Play CDN e o Livewire serve o próprio JS, o build do Vite hoje entrega apenas um
CSS Tailwind (redundante com a CDN) e um bundle com `axios` (que o código não
usa). **Se você remover as três diretivas `@vite`**, a aplicação roda sem
Node/NPM. Enquanto elas existirem, `npm install` + `npm run build` são
obrigatórios no deploy.

**Por que o `--seed` não deve rodar sempre?**
Os seeders criam o usuário admin (`gestor@master.com`, e-mail único). Reexecutar
falha por violação de unicidade. Rode o seed só no primeiro provisionamento.

**Como funciona o reset de senha?**
O `User::sendPasswordResetNotification()` envia o e-mail via **API HTTP do
Mailpit** (`MAILPIT_API_URL`), não pelo mailer padrão do Laravel. Em produção,
aponte `MAILPIT_API_URL` para um serviço compatível **ou** adapte o método para
usar o mailer configurado (`MAIL_MAILER`).

---

## Checklist final

- [ ] `git clone` e `cd diabeet`
- [ ] `cp .env.example .env` e **preencher** as variáveis (APP_*, DB_*, MAIL_*)
- [ ] `composer install` (`--no-dev --optimize-autoloader` em produção)
- [ ] `php artisan key:generate`
- [ ] `docker compose up -d` (ou apontar para um Postgres existente)
- [ ] `php artisan migrate --seed` (**apenas no 1º provisionamento**)
- [ ] `php artisan storage:link`
- [ ] `npm install && npm run build` (enquanto houver `@vite`)
- [ ] Produção: `php artisan optimize` + permissões em `storage/` e `bootstrap/cache/`
- [ ] Trocar a senha do usuário admin padrão
- [ ] Dev: `php artisan serve` | Produção: Nginx + PHP-FPM sobre `public/`
