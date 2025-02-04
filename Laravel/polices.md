## Apêndice

Imagine que você esta construindo uma aplicação e precisa controlar acessos, vamos usar um mercado de exemplo: o gerente pode incluir um novo produto, alterar, deletar e visualizar; já um operador de estoque pode visualizar, alterar apenas a quantidade do produto.

Imagine controlar estas regras sem uma padronização, você usaria uma controller ou um middleware? Naturalmente ficaria bagunçado, difícil de dar manutenção e de outras pessoas entenderem. Pensando nisso o Laravel trás o recurso Policies (políticas), que padroniza as políticas de acesso aos recursos oferecidos por sua aplicação. Agora como isso funciona?

As Policies são classes que centraliza a logica de autorização para uma determinada model ou recurso. Elas permitem definir sobre quais regras os usuários podem realizar determinadas ações, como criar, visualizar, atualizar ou deletar dentro de cada recurso.

### Para que servem as Policies?

- Organização: centralizam a lógica de autorização, em vez de criar controller ou middlewares para controlar as políticas de acesso.
- Reutilização? podem ser usadas em diferentes partes da aplicação, como em controllers, views, APIS, etc.
- Manutenção: facilitam a autalização das regras de autorização em um único lugar.
- Clareza: torna o código mais limpo e fácil de entender.

### Como funcionam as Policies?

As Policies são classes que conversam com as models, oque isso quer dizer?

Quer dizer que: a model App\Model\Product e a Police App\Policies\ProductPolicy são correspondetes para criar um produto. Ou seja, uma policy atende apenas a uma model.

### Como criar uma Policy?

Na [documentação do Laravel](https://laravel.com/docs/11.x/authorization#registering-policies), temos as seguintes informações:

Podemos gerar uma Policy com:
```
php artisan make:policy ProductPolicy --model=Product
```

Por padrão, o Laravel identifica as policies automáticamente, desde que esteja seguindo os padrões de nomenclatura, porém podemos registrar uma policy manualmente da seguinte forma:

´´´
App\Provider\AppServiceProviders


use App\Models\Product;
use App\Policies\ProductPolicy;
use Illuminate\Support\Facades\Gate;
 
public function boot(): void
{
    Gate::policy(Product::class, ProductPolicy::class);
}

´´´

Agora, é criar a regra na nossa Policy:

``` 
<?php
namespace App\Policies;

use App\Models\Product;
use App\Models\User;

class ProductPolicy{
    public function 
}

?>
```