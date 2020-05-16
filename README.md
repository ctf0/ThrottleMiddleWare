the new middleware extends the original so no losing functionality here, we simply changed the plain `Too Many Attempts.` to a custom view instead.

- save file to `app/Http/Middleware/ThrottleMiddleWare.php`
- Then go to ***routeMiddleware*** array in **app/Http/Kernel.php** and change

```php
// before
'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,

// after
'throttle' => \App\Http\Middleware\ThrottleMiddleWare::class,
```

** you can find the view file among others in https://github.com/ctf0/Error-Views
