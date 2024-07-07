# Sistema de Gerenciamento de Ocorrências

## Visão Geral
O Sistema de Gerenciamento de Ocorrências é uma aplicação web desenvolvida para facilitar o registro, acompanhamento e gestão de ocorrências diversas. Utilizando tecnologias modernas como Symfony 6 no backend e JavaScript com Bootstrap no frontend, o sistema oferece uma interface intuitiva e robusta para usuários e administradores.

## Funcionalidades Principais
- **Registro de Ocorrências:** Permite aos usuários criar novas ocorrências, fornecendo detalhes como título, descrição, tipo, data, prioridade, endereço, entre outros.
  
- **Acompanhamento em Tempo Real:** Os gestores podem visualizar e gerenciar o status das ocorrências em tempo real, incluindo atualizações recentes e histórico de alterações.
  
- **Geração de Relatórios:** Facilita a geração de relatórios personalizados com base em filtros específicos, fornecendo insights valiosos sobre o desempenho e as tendências das ocorrências.

- **Integração Mobile:** Complementa a funcionalidade web com um aplicativo móvel para permitir o registro e acompanhamento de ocorrências em qualquer lugar e a qualquer momento.

## Tecnologias Utilizadas
- **Backend:** Symfony 6, PHP 8, Doctrine ORM, MySQL 8
- **Frontend:** JavaScript, Bootstrap, HTML/CSS, DataTable
- **Outras Ferramentas:** Git para controle de versão, Docker para containerização, PHPUnit para testes, entre outros.

## Instalação e Execução Local
1. **Clonar o Repositório:**
git clone https://github.com/Zynich/cidadao-conectado.git
cd nome-do-repositorio

2. **Instalar Dependências:**
composer install - Utilizado composer
npm install
3. **Configurar Variáveis de Ambiente:**
- Renomeie o arquivo `.env.test` para `.env` e configure suas variáveis de ambiente, como conexão com o banco de dados e chaves de API, conforme necessário.

4. **Inicializar o Servidor:**
symfony server:start -d

5. **Acessar o Sistema:**
Abra seu navegador e vá para `http://localhost:8000` para acessar o Sistema de Gerenciamento de Ocorrências.

## Licença
Este é um projeto privado e sua licensa não é comercial.
