# BioLinks - Sistema de Bio Links para Redes Sociais

[Laravel](https://img.shields.io/badge/Laravel-11.31-FF2D20?logo=laravel&logoColor=white)
[PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?logo=php&logoColor=white)
[Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-3.4.17-38B2AC?logo=tailwind-css&logoColor=white)
[DaisyUI](https://img.shields.io/badge/DaisyUI-5.1.13-5A0EF8?logo=daisyui&logoColor=white)

## 📖 Sobre o Projeto

O BioLinks é uma aplicação web desenvolvida em **Laravel 11** que permite aos usuários criarem páginas personalizadas com múltiplos links, similar ao Linktree. É a solução perfeita para concentrar todos os seus links importantes em uma única página profissional.

### ✨ Funcionalidades Principais

- **🔐 Sistema de Autenticação**: Registro e login de usuários
- **👤 Perfil Personalizado**: Nome, descrição e foto de perfil
- **🔗 Gerenciamento de Links**: Criar, editar, excluir e reordenar links
- **📱 Design Responsivo**: Interface otimizada para mobile e desktop
- **🎨 Interface Moderna**: Design limpo usando Tailwind CSS e DaisyUI
- **🔒 Segurança**: Políticas de autorização para proteger dados dos usuários
- **📄 URLs Amigáveis**: Acesso via handler personalizado (ex: `/joao`)

### 🛠 Tecnologias Utilizadas

- **Backend**: Laravel 11.31
- **Frontend**: Blade Templates, Tailwind CSS, DaisyUI
- **Database**: SQLite (desenvolvimento)
- **Build Tool**: Vite
- **Estilo**: Tailwind CSS + DaisyUI

## 🚀 Instalação

### Pré-requisitos

- PHP 8.2 ou superior
- Composer
- Node.js e npm
- Git

### Passo a Passo

1. **Clone o repositório**
   ```bash
   git clone https://github.com/felipeisraelsantos/biolinks-laravel-11.git
   cd biolinks-laravel-11
   ```

2. **Instale as dependências do PHP**
   ```bash
   composer install
   ```

3. **Instale as dependências do Node.js**
   ```bash
   npm install
   ```

4. **Configure o ambiente**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure o banco de dados**
   
   O projeto está configurado para usar SQLite por padrão. O arquivo já existe em `database/database.sqlite`.
   
   Se preferir usar outro banco, edite o arquivo `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=biolinks
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Execute as migrações**
   ```bash
   php artisan migrate
   ```

7. **Execute os seeders (opcional)**
   ```bash
   php artisan db:seed
   ```

8. **Crie o link simbólico para storage**
   ```bash
   php artisan storage:link
   ```

9. **Compile os assets**
   ```bash
   npm run build
   ```

10. **Inicie o servidor de desenvolvimento**
    ```bash
    php artisan serve
    ```

A aplicação estará disponível em `http://localhost:8000`

### Desenvolvimento

Para desenvolvimento, você pode usar os comandos:

```bash
# Terminal 1 - Servidor Laravel
php artisan serve

# Terminal 2 - Watch dos assets
npm run dev
```

## 📱 Como Usar

### 1. Cadastro e Login
- Acesse `/register` para criar uma conta
- Faça login em `/login`

### 2. Configuração do Perfil
- Acesse seu dashboard após o login
- Configure seu handler (URL personalizada)
- Adicione uma descrição
- Faça upload da sua foto de perfil

### 3. Gerenciamento de Links
- **Adicionar Link**: Clique em "Novo Link" no dashboard
- **Editar Link**: Clique no ícone de edição ao lado do link
- **Reordenar**: Use os botões de seta para cima/baixo
- **Excluir**: Clique no ícone de lixeira

### 4. Compartilhar sua Página
- Sua página estará disponível em: `seusite.com/seuhandler`
- Exemplo: `localhost:8000/joao`

## 🎯 Casos de Uso Reais

### 📱 Influenciadores Digitais
**Problema que resolve**: Influenciadores precisam compartilhar múltiplos links (Instagram, YouTube, TikTok, loja online) mas as redes sociais limitam a apenas um link na bio.

**Solução**: Uma página unificada com todos os links importantes, facilmente atualizável.

### 🛍 E-commerce e Vendedores
**Problema que resolve**: Vendedores online precisam direcionar clientes para diferentes plataformas (WhatsApp, catálogo, promoções).

**Solução**: Centralize todos os pontos de contato e vendas em uma única página profissional.

### 🎵 Artistas e Músicos
**Problema que resolve**: Músicos querem promover suas músicas em várias plataformas (Spotify, YouTube, Apple Music, shows).

**Solução**: Uma página que concentra toda a presença digital musical do artista.

### 💼 Profissionais e Consultores
**Problema que resolve**: Profissionais precisam compartilhar portfólio, LinkedIn, agendamento de consultas e contatos.

**Solução**: Um cartão de visita digital profissional e sempre atualizado.

### 🏢 Pequenas Empresas
**Problema que resolve**: Empresas pequenas precisam direcionar clientes para diferentes serviços (site, WhatsApp, redes sociais, avaliações).

**Solução**: Uma landing page simples que centraliza todos os canais da empresa.

### 📚 Educadores e Coaches
**Problema que resolve**: Educadores querem compartilhar cursos, materiais gratuitos, redes sociais e formas de contato.

**Solução**: Uma página educativa que organiza todo o conteúdo e facilita o acesso dos alunos.

## 🏗 Arquitetura do Projeto

### Models
- **User**: Gerencia usuários, perfis e relacionamentos
- **Link**: Gerencia links individuais com ordenação

### Controllers
- **AuthControllers**: Login, registro e logout
- **DashboardController**: Página principal do usuário
- **LinkController**: CRUD de links
- **BioLinkController**: Página pública dos links
- **ProfileController**: Gerenciamento de perfil

### Policies
- **LinkPolicy**: Controla permissões de acesso aos links

### Migrations
- Usuários com campos de perfil (handler, description, photo)
- Links com ordenação e relacionamento com usuários

## 🤝 Contribuição

1. Faça o fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.

## 👨‍💻 Autor

**Felipe Israel Santos**
- GitHub: [@felipeisraelsantos](https://github.com/felipeisraelsantos)

---

⭐ Se este projeto te ajudou, considere dar uma estrela no repositório!
