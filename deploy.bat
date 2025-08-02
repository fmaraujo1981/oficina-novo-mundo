@echo off
echo 🚀 Publicando Oficina "Vamos Habitar um Novo Mundo" no GitHub...
echo.

REM Inicializar repositório Git (se não existir)
if not exist .git (
    echo 📁 Inicializando repositório Git...
    git init
    echo.
)

REM Adicionar todos os arquivos
echo 📦 Adicionando arquivos...
git add .

REM Fazer commit
echo 💾 Fazendo commit...
git commit -m "🌍 Oficina: Vamos Habitar um Novo Mundo - Gamificação Educacional"

REM Definir branch principal
git branch -M main

REM Adicionar origem remota (substitua SEU_USUARIO pelo seu usuário do GitHub)
echo 🔗 Configurando repositório remoto...
echo IMPORTANTE: Substitua 'SEU_USUARIO' pelo seu usuário do GitHub no comando abaixo:
echo git remote add origin https://github.com/SEU_USUARIO/oficina-novo-mundo.git
echo.
pause

REM Push para GitHub
echo 🚀 Enviando para GitHub...
git push -u origin main

echo.
echo ✅ Projeto publicado com sucesso!
echo 🌐 Acesse: https://SEU_USUARIO.github.io/oficina-novo-mundo
echo.
pause