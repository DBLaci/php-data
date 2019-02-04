Class used to map MySQL database table record to object in a simple / low level but generic way with callback possibilities.

Use

composer require dblaci/data

Use Database connection like this:

    new Database('mysql:host=' . getenv('MYSQL_HOST').';dbname=' . getenv('MYSQL_DB') . ';charset=utf8mb4', getenv('MYSQL_USERNAME'), getenv('MYSQL_PASSWORD'), [
        \PDO::ATTR_EMULATE_PREPARES => false,
        \PDO::ATTR_STRINGIFY_FETCHES => false,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    ]);
