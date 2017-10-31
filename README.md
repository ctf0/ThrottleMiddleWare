- save file to `app/Http/Middleware/Throttle.php`
- Then go to ***routeMiddleware*** array in **app/Http/Kernel.php** and change

```php
// before
'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,

// after
'throttle' => \App\Http\Middleware\Throttle::class,
```

** you can find the view file among others in https://github.com/ctf0/Error-Views/tree/5.5
