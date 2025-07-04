# DevVenture

Projeto exclusivo da equipe Harpion desenvolvido com foco em qualidade e segurança. Esta aplicação utiliza tecnologias modernas de front-end e boas práticas de cibersegurança para garantir confiabilidade.

## Tecnologias principais
- Vite
- TypeScript
- React
- shadcn-ui
- Tailwind CSS

## Pré-requisitos
- Node.js 18 ou superior
- npm ou bun para gestão de dependências

## Instalação
1. Clone este repositório.
2. Execute `npm install` ou `bun install` para instalar as dependências.
3. Copie o arquivo `.env.example` para `.env` e configure suas variáveis de ambiente.

## Ambiente de desenvolvimento
Para iniciar o servidor de desenvolvimento execute:

```bash
npm run dev
```

## Build para produção
Para gerar os arquivos otimizados em `dist/`:

```bash
npm run build
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
