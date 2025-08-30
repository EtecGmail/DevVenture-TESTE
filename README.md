# DevVenture

Projeto exclusivo da equipe Harpion desenvolvido com foco em qualidade e segurança. Esta aplicação utiliza tecnologias modernas de front-end e boas práticas de cibersegurança para garantir confiabilidade.

## Estrutura

- `frontend/` – interface React construída com Vite.
- `backend/` – API desenvolvida em Laravel.

## Tecnologias principais
- Vite
- TypeScript
- React
- shadcn-ui
- Tailwind CSS

## Pré-requisitos
- Node.js 18 ou superior
- PHP 8.0 ou superior e Composer
- npm ou bun para gestão de dependências do front-end

## Instalação

### Front-end
1. `cd frontend`
2. `npm install` ou `bun install`
3. `npm run dev` para ambiente de desenvolvimento
4. `npm run build` para gerar os arquivos de produção

### Back-end
1. `cd backend`
2. `composer install`
3. Copie `.env.example` para `.env` e configure as variáveis:

   **Linux/macOS**

   ```bash
   cp .env.example .env
   ```

   **Windows (CMD)**

   ```cmd
   copy .env.example .env
   ```

   **Windows (PowerShell)**

   ```powershell
   Copy-Item .env.example .env
   ```

   Você também pode copiar o arquivo manualmente usando um gerenciador de arquivos.
4. `php artisan serve` para iniciar a API

## Testes e lint
Execute os linters e testes automatizados:

```bash
cd frontend && npm run lint && npm test
cd backend && vendor/bin/pint && php artisan test
```

## Boas práticas de segurança
- Mantenha as dependências sempre atualizadas.
- Não exponha segredos ou chaves de API no repositório.
- Utilize variáveis de ambiente para informações sensíveis.
- Aplique ferramentas de análise estática (lint) e testes de segurança sempre que possível.
- Utilize HTTPS e valide as entradas do usuário para evitar XSS, CSRF e injeção de código.

## Git Flow
Consulte [docs/GITFLOW.md](docs/GITFLOW.md) para saber como utilizar a estratégia de branches adotada neste projeto.

## Commits convencionais
Este projeto segue o padrão [Conventional Commits](https://www.conventionalcommits.org/).
Todos os commits devem utilizar o formato `tipo: descrição` e podem conter escopos opcionais.

Exemplo:
```bash
feat(login): adicionar fluxo social
fix(api): corrigir resposta 500
```

Um hook de `commit-msg` via Commitlint garante automaticamente a validação das mensagens.

---
Todos os direitos reservados à equipe Harpion.
