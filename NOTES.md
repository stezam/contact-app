# Creating The Contact application using Laravel


### Artisan command line interface

1. You can use the command php artisan list to view all the commands and arguments that can be used in artisan.
```
$ php artisan list
Laravel Framework 10.48.7

Usage:
  command [options] [arguments]

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
      --env[=ENV]       The environment the command should run under
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  about                   Display basic information about your application
  clear-compiled          Remove the compiled class file
  completion              Dump the shell completion script
  db                      Start a new database CLI session
  docs                    Access the Laravel documentation
  down                    Put the application into maintenance / demo mode
  env                     Display the current framework environment
  help                    Display help for a command
  inspire                 Display an inspiring quote
  list                    List commands
  migrate                 Run the database migrations
  optimize                Cache the framework bootstrap files
  serve                   Serve the application on the PHP development server
  test                    Run the application tests
  tinker                  Interact with your application
  up                      Bring the application out of maintenance mode
 auth
  auth:clear-resets       Flush expired password reset tokens
 cache
  cache:clear             Flush the application cache
  cache:forget            Remove an item from the cache
  cache:prune-stale-tags  Prune stale cache tags from the cache (Redis only)
  cache:table             Create a migration for the cache database table
 channel
  channel:list            List all registered private broadcast channels
 config
  config:cache            Create a cache file for faster configuration loading
  config:clear            Remove the configuration cache file
  config:show             Display all of the values for a given configuration file
 db
  db:monitor              Monitor the number of connections on the specified database
  db:seed                 Seed the database with records
  db:show                 Display information about the given database
  db:table                Display information about the given database table
  db:wipe                 Drop all tables, views, and types
 env
  env:decrypt             Decrypt an environment file
  env:encrypt             Encrypt an environment file
 event
  event:cache             Discover and cache the application's events and listeners
  event:clear             Clear all cached events and listeners
  event:generate          Generate the missing events and listeners based on registration
  event:list              List the application's events and listeners
 fortify
  fortify:install         Install all of the Fortify resources
 key
  key:generate            Set the application key
 lang
  lang:publish            Publish all language files that are available for customization
 make
  make:cast               Create a new custom Eloquent cast class
  make:channel            Create a new channel class
  make:command            Create a new Artisan command
  make:component          Create a new view component class
  make:controller         Create a new controller class
  make:event              Create a new event class
  make:exception          Create a new custom exception class
  make:factory            Create a new model factory
  make:job                Create a new job class
  make:listener           Create a new event listener class
  make:mail               Create a new email class
  make:middleware         Create a new middleware class
  make:migration          Create a new migration file
  make:model              Create a new Eloquent model class
  make:notification       Create a new notification class
  make:observer           Create a new observer class
  make:policy             Create a new policy class
  make:provider           Create a new service provider class
  make:request            Create a new form request class
  make:resource           Create a new resource
  make:rule               Create a new validation rule
  make:scope              Create a new scope class
  make:seeder             Create a new seeder class
  make:test               Create a new test class
  make:view               Create a new view
 migrate
  migrate:fresh           Drop all tables and re-run all migrations
  migrate:install         Create the migration repository
  migrate:refresh         Reset and re-run all migrations
  migrate:reset           Rollback all database migrations
  migrate:rollback        Rollback the last database migration
  migrate:status          Show the status of each migration
 model
  model:prune             Prune models that are no longer needed
  model:show              Show information about an Eloquent model
 notifications
  notifications:table     Create a migration for the notifications table
 optimize
  optimize:clear          Remove the cached bootstrap files
 package
  package:discover        Rebuild the cached package manifest
 queue
  queue:batches-table     Create a migration for the batches database table
  queue:clear             Delete all of the jobs from the specified queue
  queue:failed            List all of the failed queue jobs
  queue:failed-table      Create a migration for the failed queue jobs database table
  queue:flush             Flush all of the failed queue jobs
  queue:forget            Delete a failed queue job
  queue:listen            Listen to a given queue
  queue:monitor           Monitor the size of the specified queues
  queue:prune-batches     Prune stale entries from the batches database
  queue:prune-failed      Prune stale entries from the failed jobs table
  queue:restart           Restart queue worker daemons after their current job
  queue:retry             Retry a failed queue job
  queue:retry-batch       Retry the failed jobs for a batch
  queue:table             Create a migration for the queue jobs database table
  queue:work              Start processing jobs on the queue as a daemon
 route
  route:cache             Create a route cache file for faster route registration
  route:clear             Remove the route cache file
  route:list              List all registered routes
 sail
  sail:add                Add a service to an existing Sail installation
  sail:install            Install Laravel Sail's default Docker Compose file
  sail:publish            Publish the Laravel Sail Docker files
 sanctum
  sanctum:prune-expired   Prune tokens expired for more than specified number of hours
 schedule
  schedule:clear-cache    Delete the cached mutex files created by scheduler
  schedule:interrupt      Interrupt the current schedule run
  schedule:list           List all scheduled tasks
  schedule:run            Run the scheduled commands
  schedule:test           Run a scheduled command
  schedule:work           Start the schedule worker
 schema
  schema:dump             Dump the given database schema
 session
  session:table           Create a migration for the session database table
 storage
  storage:link            Create the symbolic links configured for the application
  storage:unlink          Delete existing symbolic links configured for the application
 stub
  stub:publish            Publish all stubs that are available for customization
 vendor
  vendor:publish          Publish any publishable assets from vendor packages
 view
  view:cache              Compile all of the application's Blade templates
  view:clear              Clear all compiled view files
```

Command example 
```
php artisan serve -h

php artisan -h

php artisan make:controller -h
```

### Using Tinker in Laravel
1. To use tinker run the command below in the terminal.
```
PS C:\laragon\www\contact-app> php artisan tinker
```
```
> 7*5
= 35

> 7 > 5
= true

> 7 == 7
= true

> 7 == '7'
= true

> 7 == "7"
= true

> 7 === "7"
= false

> strlen('hello world')
= 11

> view ('welcome')
= Illuminate\View\View {#6102}


view('welcome')->render()
= """
  <!DOCTYPE html>\r\n
  <html lang="en">\r\n
  \r\n
  <head>\r\n
      <!-- Required meta tags -->\r\n
      <meta charset="utf-8">\r\n
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">\r\n
  \r\n
      <title>Contact-App</title>\r\n
  \r\n
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">\r\n
      <!-- Bootstrap -->\r\n
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">\r\n
      <link href="/css/bootstrap.min.css" rel="stylesheet">\r\n
      <link href="/css/custom.css" rel="stylesheet">\r\n
  </head>\r\n
  \r\n
  <body>\r\n
      <!-- navbar -->\r\n
      <nav class="navbar navbar-expand-lg navbar-light bg-light">\r\n
          <div class="container">\r\n
              <a class="navbar-brand text-uppercase" href="/">\r\n
                  <strong>Contact</strong> App\r\n
              </a>\r\n
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler"\r\n
                  aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">\r\n
                  <span class="navbar-toggler-icon"></span>\r\n
              </button>\r\n
  \r\n
              <!-- /.navbar-header -->\r\n
              <div class="collapse navbar-collapse" id="navbar-toggler">\r\n
                  <ul class="navbar-nav ml-auto">\r\n
                      <li class="nav-item mr-2"><a href="http://localhost/login" class="btn btn-outline-secondary">Login</a>\r\n
                      </li>\r\n
                      <li class="nav-item"><a href="http://localhost/register" class="btn btn-outline-primary">Register</a>\r\n
                      </li>\r\n
                  </ul>\r\n
              </div>\r\n
          </div>\r\n
      </nav>\r\n
      \r\n
          <!-- content -->\n
      <div class="py-5 bg-white">\n
          <div class="px-4 my-5 text-center">\n
              <h1 class="display-5 fw-bold mt-4">Contact App</h1>\n
              <div class="col-lg-6 mx-auto">\n
                  <p class="lead mb-4">Contact App gives you everything you need to organize your contacts easily.</p>\n
                  <div class="d-flex justify-content-sm-center">\n
                      <a href="#" class="btn btn-primary btn-lg mr-2">Sign up</a>\n
                      <a href="#" class="btn btn-outline-secondary btn-lg">Sign in</a>\n
                  </div>\n
              </div>\n
          </div>\n
      </div>\n
      <div class="container py-5">\n
          <div class="row">\n
              <div class="col-lg-4">\n
                  <h3>Data Protection</h3>\n
                  <p>In the event of contact deletion or corruption, keep your contacts secure and unharmed across all of\n
                      your connected accounts.</p>\n
              </div><!-- /.col-lg-4 -->\n
              <div class="col-lg-4">\n
                  <h3>Notes & Tags</h3>\n
                  <p>Group, search, and filter your contacts using notes and tags.</p>\n
              </div><!-- /.col-lg-4 -->\n
              <div class="col-lg-4">\n
                  <h3>Birthday Reminders</h3>\n
                  <p>Weekly notifications are sent to you, including birthday reminders.</p>\n
              </div><!-- /.col-lg-4 -->\n
          </div>\n
      </div>\n
      <section class="bg-white">\n
          <div class="container py-5">\n
              <h2 class="text-center my-5">Easy to try. Fair pricing to upgrade.</h2>\n
              <div class="card-deck mb-3 text-center">\n
                  <div class="card mb-4 shadow-sm">\n
                      <div class="card-header">\n
                          <h4 class="my-0 font-weight-normal">Free</h4>\n
                      </div>\n
                      <div class="card-body">\n
                          <h3 class="pricing-card-title">$0 <small class="text-muted">/ mo</small></h3>\n
                          <ul class="list-unstyled mt-3 mb-4">\n
                              <li>1,000 Contacts</li>\n
                              <li>Sync 1 Accounts</li>\n
                              <li>Basic Features</li>\n
                          </ul>\n
                          <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>\n
                      </div>\n
                  </div>\n
                  <div class="card mb-4 shadow-sm">\n
                      <div class="card-header">\n
                          <h4 class="my-0 font-weight-normal">Pro</h4>\n
                      </div>\n
                      <div class="card-body">\n
                          <h3 class="pricing-card-title">$9 <small class="text-muted">/ mo</small></h3>\n
                          <ul class="list-unstyled mt-3 mb-4">\n
                              <li>25,000 Contacts</li>\n
                              <li>Sync 5 Accounts</li>\n
                              <li>Pro Features</li>\n
                          </ul>\n
                          <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>\n
                      </div>\n
                  </div>\n
                  <div class="card mb-4 shadow-sm">\n
                      <div class="card-header">\n
                          <h4 class="my-0 font-weight-normal">Enterprise</h4>\n
                      </div>\n
                      <div class="card-body">\n
                          <h3 class="pricing-card-title">$15 <small class="text-muted">/ mo</small></h3>\n
                          <ul class="list-unstyled mt-3 mb-4">\n
                              <li>50,000 Contacts</li>\n
                              <li>Sync 7 Accounts</li>\n
                              <li>Advance Features</li>\n
                          </ul>\n
                          <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>\n
                      </div>\n
                  </div>\n
              </div>\n
          </div>\n
      </section>\n
  \r\n
      <footer class="py-5 footer">\r\n
          <div class="container">\r\n
              <div class="row">\r\n
                  <div class="col-12 col-md">\r\n
                      <strong>Contact App</strong>\r\n
                      <small class="d-block mb-3">© 2021-2022</small>\r\n
                  </div>\r\n
                  <div class="col-6 col-md">\r\n
                      <h5>Features</h5>\r\n
                      <ul class="list-unstyled text-small">\r\n
                          <li><a href="#">Email Marketing</a></li>\r\n
                          <li><a href="#">Email Template</a></li>\r\n
                          <li><a href="#">Email Broadcast</a></li>\r\n
                          <li><a href="#">Autoresponder Email</a></li>\r\n
                          <li><a href="#">RSS-to-Email</a></li>\r\n
                      </ul>\r\n
                  </div>\r\n
                  <div class="col-6 col-md">\r\n
                      <h5>Resources</h5>\r\n
                      <ul class="list-unstyled text-small">\r\n
                          <li><a href="#">Landing page Guide</a></li>\r\n
                          <li><a href="#">Inbound Marketing Guide</a></li>\r\n
                          <li><a href="#">Email Marketing Guide</a></li>\r\n
                          <li><a href="#">Helpdesk Guide</a></li>\r\n
                      </ul>\r\n
                  </div>\r\n
                  <div class="col-6 col-md">\r\n
                      <h5>About</h5>\r\n
                      <ul class="list-unstyled text-small">\r\n
                          <li><a href="#">Team</a></li>\r\n
                          <li><a href="#">Locations</a></li>\r\n
                          <li><a href="#">Privacy</a></li>\r\n
                          <li><a href="#">Terms</a></li>\r\n
                      </ul>\r\n
                  </div>\r\n
              </div>\r\n
          </div>\r\n
      </footer>\r\n
      <script src="/js/jquery.min.js"></script>\r\n
      <script src="/js/popper.min.js"></script>\r\n
      <script src="/js/bootstrap.min.js"></script>\r\n
  </body>\r\n
  \r\n
  </html>
  """
```

```
> Str::kebab("HelloWorld")
= "hello-world"
```

```
> str("HelloWorld")->kebab()
= Illuminate\Support\Stringable {#6091
    value: "hello-world",
  }

> Str::snake('HelloWorld')
= "hello_world"  

> str('HelloWorld')->snake()
= Illuminate\Support\Stringable {#6110
    value: "hello_world",
  }
```
to get help while you are in tinker just type 'help'

```
> help
  help              Show a list of commands. Type `help [foo]` for information about [foo].      Aliases: ?
  ls                List local, instance or class variables, methods and constants.              Aliases: dir
  dump              Dump an object or primitive.
  doc               Read the documentation for an object, class, constant, method or property.   Aliases: rtfm, man
  show              Show the code for an object, class, constant, method or property.
  wtf               Show the backtrace of the most recent exception.                             Aliases: last-exception, wtf?
  whereami          Show where you are in the code.
  throw-up          Throw an exception or error out of the Psy Shell.
  timeit            Profiles with a timer.
  trace             Show the current call stack.
  buffer            Show (or clear) the contents of the code input buffer.                       Aliases: buf
  clear             Clear the Psy Shell screen.
  edit              Open an external editor. Afterwards, get produced code in input buffer.
  sudo              Evaluate PHP code, bypassing visibility restrictions.
  history           Show the Psy Shell history.                                                  Aliases: hist
  exit              End the current session and return to caller.                                Aliases: quit, q
  migrate           Run the database migrations
  migrate:install   Create the migration repository
  inspire           Display an inspiring quote
  clear-compiled    Remove the compiled class file
  down              Put the application into maintenance / demo mode
  env               Display the current framework environment
  optimize          Cache the framework bootstrap files
  up                Bring the application out of maintenance mode
>

> doc view
function view($view = null, $data = [], $mergeData = [])

Description:
  Get the evaluated view contents for the given view.

Param:
  string|null                                    $view
  \Illuminate\Contracts\Support\Arrayable|array  $data
  array                                          $mergeData

Return:
  \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
>

> show view
1004:     /**
1005:      * Get the evaluated view contents for the given view.
1006:      *
1007:      * @param  string|null  $view
1008:      * @param  \Illuminate\Contracts\Support\Arrayable|array  $data
1009:      * @param  array  $mergeData
1010:      * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
1011:      */
1012:     function view($view = null, $data = [], $mergeData = [])
1013:     {
1014:         $factory = app(ViewFactory::class);
1015:
1016:         if (func_num_args() === 0) {
1017:             return $factory;
1018:         }
1019:
1020:         return $factory->make($view, $data, $mergeData);
1021:     }
```
to exit tinker just type 'exit'




