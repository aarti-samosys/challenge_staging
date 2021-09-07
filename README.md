Code Challenge Task

Successful outcome is to have two API endpoints. One that will list all records in
transactions table. The second endpoint will accept an ID in the route '/transaction/1'
for example. These endpoints do not need to be authenticated for this challenge.

All code should comply with PSR-12 coding standards.

Key expectations:
- Strict typing MUST be used
- Controllers MUST be single action
- Controllers MUST NOT contain any business logic
- Controllers MUST NOT contain database calls
- Controllers MUST return a resource class
- Facades SHOULD be avoided
- All database interactions MUST be in a repository class
- Models MUST have all getters and setters present
- Classes MUST be interfaced
- Classes MUST be final when not being extended

ENV Setup:
- docker-compose up -d
- sh composer-install.sh
- docker exec php php artisan migrate

NOTES: You may need to edit the docker files to work with your local users ID.

https://www.php-fig.org/psr/psr-12/
