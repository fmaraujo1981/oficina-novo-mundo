# 📖 Guia de Publicação no GitHub

## 🎯 Passo a Passo Completo

### 1️⃣ Criar Conta no GitHub
- Acesse [github.com](https://github.com)
- Crie uma conta gratuita se não tiver

### 2️⃣ Criar Repositório
1. Clique em **"New repository"**
2. Nome: `oficina-novo-mundo`
3. Descrição: `Oficina de Gamificação Educacional - Vamos Habitar um Novo Mundo`
4. Marque **"Public"**
5. **NÃO** marque "Add a README file" (já temos um)
6. Clique **"Create repository"**

### 3️⃣ Instalar Git (se necessário)
- Baixe em: [git-scm.com](https://git-scm.com/)
- Instale com configurações padrão

### 4️⃣ Configurar Git (primeira vez)
Abra o terminal/cmd na pasta do projeto e execute:
```bash
git config --global user.name "Seu Nome"
git config --global user.email "seu.email@exemplo.com"
```

### 5️⃣ Publicar o Projeto

#### Opção A: Usando o Script Automático (Windows)
1. Execute o arquivo `deploy.bat`
2. Substitua `SEU_USUARIO` pelo seu usuário do GitHub
3. Siga as instruções na tela

#### Opção B: Comandos Manuais
```bash
# Inicializar repositório
git init

# Adicionar arquivos
git add .

# Fazer commit
git commit -m "🌍 Oficina: Vamos Habitar um Novo Mundo"

# Definir branch principal
git branch -M main

# Adicionar origem (substitua SEU_USUARIO)
git remote add origin https://github.com/SEU_USUARIO/oficina-novo-mundo.git

# Enviar para GitHub
git push -u origin main
```

### 6️⃣ Ativar GitHub Pages
1. Vá para o repositório no GitHub
2. Clique em **"Settings"**
3. Role até **"Pages"** no menu lateral
4. Em **"Source"** selecione **"Deploy from a branch"**
5. Escolha **"main"** e **"/ (root)"**
6. Clique **"Save"**

### 7️⃣ Acessar o Site
- URL: `https://SEU_USUARIO.github.io/oficina-novo-mundo`
- Pode levar alguns minutos para ficar disponível

## 🔄 Atualizações Futuras

Para atualizar o site após mudanças:
```bash
git add .
git commit -m "Descrição da atualização"
git push
```

## 🆘 Problemas Comuns

### Erro de autenticação
- Use **Personal Access Token** em vez de senha
- Gere em: GitHub → Settings → Developer settings → Personal access tokens

### Site não carrega
- Aguarde 5-10 minutos após primeira publicação
- Verifique se GitHub Pages está ativado
- Confirme se `index.html` existe na raiz

### Arquivos não aparecem
- Verifique se fez `git add .` antes do commit
- Confirme se o push foi bem-sucedido

## 📞 Suporte

Se precisar de ajuda:
1. Consulte a [documentação do GitHub](https://docs.github.com/)
2. Entre em contato via [LinkedIn](https://www.linkedin.com/in/fabiano-araujo-62a7671b/)

---

**🎉 Parabéns! Sua oficina estará disponível para o mundo todo!**