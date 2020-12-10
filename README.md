
# hyperf-mongodb


## 功能

- 配置mongodb.
- mongodb集合操作.

## 安装 ([Composer](https://getcomposer.org))

```bash
composer require nligo/mongodb dev-master
```

## 推送配置文件


```
php bin/hyperf.php mongodb:publish --config
```

## 如何使用

###Document
```shell script
namespace App\Document;

use  Nlitt\Mongodb\MongoDb;

class User extends MongoDb
{
    /**
     * mongodb表
     *
     * @var null
     */
    public $collectionName = 'user';
}
```

###Controller
```shell script
namespace App\Controller;

use App\Document\User;

class UserController extends AbstractController
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return $this->user->findOne();
    }
}

```

###Response
```json
{
    "_id": "5fd185e8cfee47454d71d032",
    "name": "nlitt"
}
```
