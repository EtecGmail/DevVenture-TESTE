# Git Flow

Este projeto segue a metodologia **Git Flow** para organizar o ciclo de desenvolvimento. Abaixo estão as orientações básicas de uso.

## Branches principais
- `main`: contém o código em produção.
- `develop`: branch de integração onde as novas funcionalidades são agrupadas.
- `feature/*`: novas funcionalidades que partem de `develop`.
- `release/*`: preparação para uma nova versão, iniciada a partir de `develop`.
- `hotfix/*`: correções urgentes que partem de `main`.

## Exemplo de criação de branches
```bash
# Feature
git checkout develop
git checkout -b feature/nova-funcionalidade

# Release
git checkout develop
git checkout -b release/1.0.0

# Hotfix
git checkout main
git checkout -b hotfix/ajuste-critico
```

## Exemplo de merge de branches
```bash
# Merge de feature em develop
git checkout develop
git merge feature/nova-funcionalidade

# Merge de release em main e develop
git checkout main
git merge release/1.0.0
git checkout develop
git merge release/1.0.0

# Merge de hotfix em main e develop
git checkout main
git merge hotfix/ajuste-critico
git checkout develop
git merge hotfix/ajuste-critico
```
