- save file to `app/Http/Middleware/ThrottleMiddleWare.php`
- Then go to ***routeMiddleware*** array in **app/Http/Kernel.php** and change

```php
// before
'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,

// after
'throttle' => \App\Http\Middleware\ThrottleMiddleWare::class,
```

> the new middleware extends the original so no lossing functionality here, we simply changed the plain `Too Many Attempts.` to a custom view instead.

** you can find the view file among others in https://github.com/ctf0/Error-Views
