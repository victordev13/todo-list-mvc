# Todo List Manager

Um sistema de gerenciamento de listas de tarefas desenvolvido em PHP seguindo o padrão MVC.

## Características

- **Arquitetura MVC**: Separação clara entre Model, View e Controller
- **Bootstrap 5**: Interface responsiva e moderna
- **MySQL**: Banco de dados para persistência
- **Autoload PSR-4**: Carregamento automático de classes

## Estrutura do Projeto

```
todo-list/
├── app/
│   ├── Controller/
│   │   ├── AbstractController.php
│   │   ├── AppController.php
│   │   ├── TodoItems/
│   │   │   ├── SalvarController.php
│   │   │   ├── ToggleController.php
│   │   │   └── RemoverController.php
│   │   └── Error/
│   │       ├── ErrorController.php
│   │       └── NotFoundController.php
│   ├── Database/
│   │   ├── Database.php
│   │   └── Query.php
│   └── Model/
│       └── Tarefa.php
├── public/
│   ├── index.php
│   ├── routes.php
│   └── view/
│       ├── index.php
│       ├── error.php
│       ├── 404.php
│       └── includes/
│           ├── header.php
│           └── footer.php
└── composer.json
```

## Funcionalidades

### Listas de Tarefas
- ✅ Criar nova lista
- ✅ Listar todas as listas
- ✅ Editar lista existente
- ✅ Remover lista
- ✅ Ver detalhes da lista com itens
- ✅ Indicador de progresso (itens concluídos/total)

### Itens da Lista
- ✅ Adicionar novo item
- ✅ Marcar/desmarcar como concluído
- ✅ Remover item
- ✅ Visualização organizada com checkboxes

## Configuração

### 1. Banco de Dados

Execute o arquivo SQL na raiz do projeto principal:
```sql
-- Arquivo: todo-list-database.sql
```

### 2. Configuração da Base de Dados

Edite as configurações de conexão em `app/Database/Query.php`:
```php
$database = new Database(
    host: 'localhost',
    database: 'todo_list',
    username: 'root',
    password: ''
);
```

### 3. Instalação

```bash
cd todo-list
composer dump-autoload
```

### 4. Servidor

Configure o servidor web para apontar para a pasta `public/` como document root.

## Rotas Disponíveis

### Listas
- `GET /` - Página inicial com resumo das listas
- `GET /todo-lists` - Listar todas as listas
- `GET /todo-lists/cadastrar` - Formulário para nova lista
- `GET /todo-lists/editar?id={id}` - Formulário para editar lista
- `POST /todo-lists/salvar` - Salvar lista (criar/editar)
- `GET /todo-lists/remover?id={id}` - Remover lista
- `GET /todo-lists/detalhes?id={id}` - Ver detalhes da lista

### Itens
- `POST /todo-items/salvar` - Adicionar novo item
- `GET /todo-items/toggle?id={id}&todo_list_id={list_id}` - Alternar status do item
- `GET /todo-items/remover?id={id}&todo_list_id={list_id}` - Remover item

### Utilitários
- `GET /error?mensagem={msg}` - Página de erro
- Qualquer rota inválida retorna 404

## Padrões Utilizados

### Controllers
- Herdam de `AbstractController`
- Método `index()` obrigatório
- Métodos auxiliares: `render()`, `redirect()`, `redirectToError()`

### Models
- Utilizam a classe `Query` para interação com banco
- Métodos CRUD padronizados
- Validação de dados

### Views
- HTML5 com Bootstrap 5
- Componentes reutilizáveis
- Design responsivo
- Ícones Bootstrap Icons

### Database
- Classe `Database` para conexão
- Classe `Query` para operações
- Prepared statements para segurança
- Relacionamentos com chaves estrangeiras

## Capturas de Tela

O sistema possui interface intuitiva com:
- Dashboard com resumo das listas
- Listagem completa com indicadores de progresso
- Formulários simples para CRUD
- Página de detalhes interativa para gerenciar itens
- Tratamento de erros amigável

## Tecnologias

- **PHP 8+**
- **MySQL**
- **Bootstrap 5.3.3**
- **Bootstrap Icons**
- **Composer** (PSR-4 Autoload)

## Próximas Implementações

- [ ] Sistema de usuários
- [ ] Categorias para listas
- [ ] Datas de vencimento
- [ ] Prioridades
- [ ] Busca e filtros
- [ ] API REST
- [ ] Testes automatizados
