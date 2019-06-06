# Tazman Marketplace Backend

Backend implementation for [Tazman Marketplace](https://github.com/taqat/tazman).


## Requirements

* PHP 7.3+
* PostgreSQL 11+


## Repository strucutre

Repository is divided in subfolders.

 * `core` - Backend Core written in PHP
 * `symfony` - PHP app created with [Symfony framework](https://symfony.com/); uses Core to provide an HTTP and CLI API for the app

### Core 
```
- doc/
- src/
  - <component>
    - Application/
      - Command/
        - <CommandName>/
          - <CommandName>HandlerInterface.php
          - <CommandName>Handler.php
          - <CommandName>.php
          - <CommandName>Result.php
      - Query/
        - <QueryName>/
          - <QueryName>HandlerInterface.php
          - <QueryName>Handler.php
          - <QueryName>.php
          - <QueryName>Result.php
      - Event/
        - <EventName>/
          - <EventName>.php
          - <EventName>HandlerInterface.php
          - <SomeOtherEventName>HandlerInterface.php
      - Service/
    - Domain/
      - Model/
        - <EntityName>.php
      - Event/
        - <EventName>/
          - <EventName>.php
          - <EventName>HandlerInterface.php
          - <SomeOtherEventName>HandlerInterface.php
      - EntityRepository/
        - <EntityName>/
          - <EntityName>RepositoryInterface.php
          - <RepositoryMethodParamName>RepositoryQuery.php
      - EntityManager/
        - <EntityName>/
          - <EntityName>ManagerInterface.php
      - Service/
    - Infrastructure/
      - Persistance/
        - Doctrine/
          - Application/
            - Query/
              - <QueryName>/
                - Doctrine<QueryName>Handler.php
          - Domain/
            - EntityRepository/
              - <EntityName>/
                - Doctrine<EntityName>Repository.php
            - EntityManager/
              - <EntityName>/
                - Doctrine<EntityName>Manager.php
- test/
  - functional/
    - <component>/Application/Command/<CommandName>/<CommandName>HandlerTest.php
    - <component>/Infrastructure/Persistance/Doctrine/Application/Query/<QueryName>/Doctrine<QueryName>HandlerTest.php
  - unit/
- .gitignore
- composer.json      
- composer.lock
- README.md
```


#### Namespaces

[PSR4](https://www.php-fig.org/psr/psr-4/) standard **must** be followed. 

|Namespace Prefix|Base dir|
|---|---|
|`\Taqat\Tazman\Core`|`../core/src`|

### Symfony 

```
- bin/
- doc/
- config/
- public/
- src/
  - Model/
    - Command/
      - <CliCommandName>/
        - <CliCommandName>InputDto.php
        - <CliCommandName>OutputDto.php
    - Controller/
      - Api/
        - Auth/
          - <ControllerName>
            - <ControllerActionName>RequestDto.php
            - <ControllerActionName>ResponseDto.php
        - Common/
          - <ControllerName>
            - <ControllerActionName>RequestDto.php
            - <ControllerActionName>ResponseDto.php
        - Player/
          - <ControllerName>
            - <ControllerActionName>RequestDto.php
            - <ControllerActionName>ResponseDto.php
        - FacilityProvider/
          - <ControllerName>
            - <ControllerActionName>RequestDto.php
            - <ControllerActionName>ResponseDto.php
        - Admin/
          - <ControllerName>
            - <ControllerActionName>RequestDto.php
            - <ControllerActionName>ResponseDto.php
        - Public/
          - <ControllerName>
            - <ControllerActionName>RequestDto.php
            - <ControllerActionName>ResponseDto.php
  - Command/
    - <CliCommandName>Command.php      
  - Controller/
    - Api/
      - Auth/
        - <ControllerName>Controller.php            
      - Common/
        - <ControllerName>Controller.php
      - Player/
        - <ControllerName>Controller.php
      - FacilityProvider/
        - <ControllerName>Controller.php
      - Admin/
        - <ControllerName>Controller.php
      - Public/
        - <ControllerName>Controller.php
- tests/
  - functional/
    - Controller/Api/Auth/<ControllerName>ControllerTest.php
    - Command/<CliCommandName>CommandTest.php
  - unit/
- var/
- .gitignore
- composer.json      
- composer.lock
- README.md
```

#### Namespaces

[PSR4](https://www.php-fig.org/psr/psr-4/) standard **must** be followed. 

|Namespace Prefix|Base dir|
|---|---|
|`\Taqat\Tazman\Symfony`|`../symfony/src`|


## Git Workflow

https://github.com/taqat/tazman/blob/master/README.md#git-workflow


## Versioning

Project **must** follow [Semantic versioning](https://semver.org/).
