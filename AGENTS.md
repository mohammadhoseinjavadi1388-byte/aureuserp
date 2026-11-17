<laravel-boost-guidelines>
=== foundation rules ===

# Laravel Boost Guidelines

The Laravel Boost guidelines are specifically curated by Laravel maintainers for this application. These guidelines should be followed closely to ensure the best experience when building Laravel applications.

## Foundational Context

This application is a Laravel application and its main Laravel ecosystems package & versions are below. You are an expert with them all. Ensure you abide by these specific packages & versions.

- php - 8.3.21
- filament/filament (FILAMENT) - v4
- laravel/framework (LARAVEL) - v11
- laravel/prompts (PROMPTS) - v0
- laravel/sanctum (SANCTUM) - v4
- livewire/livewire (LIVEWIRE) - v3
- laravel/mcp (MCP) - v0
- laravel/pint (PINT) - v1
- laravel/sail (SAIL) - v1
- pestphp/pest (PEST) - v4
- phpunit/phpunit (PHPUNIT) - v12
- tailwindcss (TAILWINDCSS) - v4

## Skills Activation

This project has domain-specific skills available. You MUST activate the relevant skill whenever you work in that domain—don't wait until you're stuck.

- `pest-testing` — Tests applications using the Pest 4 PHP framework. Activates when writing tests, creating unit or feature tests, adding assertions, testing Livewire components, browser testing, debugging test failures, working with datasets or mocking; or when the user mentions test, spec, TDD, expects, assertion, coverage, or needs to verify functionality works.
- `tailwindcss-development` — Styles applications using Tailwind CSS v4 utilities. Activates when adding styles, restyling components, working with gradients, spacing, layout, flex, grid, responsive design, dark mode, colors, typography, or borders; or when the user mentions CSS, styling, classes, Tailwind, restyle, hero section, cards, buttons, or any visual/UI changes.

## Conventions

- You must follow all existing code conventions used in this application. When creating or editing a file, check sibling files for the correct structure, approach, and naming.
- Use descriptive names for variables and methods. For example, `isRegisteredForDiscounts`, not `discount()`.
- Check for existing components to reuse before writing a new one.

## Verification Scripts

- Do not create verification scripts or tinker when tests cover that functionality and prove they work. Unit and feature tests are more important.

## Application Structure & Architecture

- Stick to existing directory structure; don't create new base folders without approval.
- Do not change the application's dependencies without approval.

## Frontend Bundling

- If the user doesn't see a frontend change reflected in the UI, it could mean they need to run `npm run build`, `npm run dev`, or `composer run dev`. Ask them.

## Documentation Files

- You must only create documentation files if explicitly requested by the user.

## Replies

- Be concise in your explanations - focus on what's important rather than explaining obvious details.

=== boost rules ===

# Laravel Boost

- Laravel Boost is an MCP server that comes with powerful tools designed specifically for this application. Use them.

## Artisan

- Use the `list-artisan-commands` tool when you need to call an Artisan command to double-check the available parameters.

## URLs

- Whenever you share a project URL with the user, you should use the `get-absolute-url` tool to ensure you're using the correct scheme, domain/IP, and port.

## Tinker / Debugging

- You should use the `tinker` tool when you need to execute PHP to debug code or query Eloquent models directly.
- Use the `database-query` tool when you only need to read from the database.
- Use the `database-schema` tool to inspect table structure before writing migrations or models.

## Reading Browser Logs With the `browser-logs` Tool

- You can read browser logs, errors, and exceptions using the `browser-logs` tool from Boost.
- Only recent browser logs will be useful - ignore old logs.

## Searching Documentation (Critically Important)

- Boost comes with a powerful `search-docs` tool you should use before trying other approaches when working with Laravel or Laravel ecosystem packages. This tool automatically passes a list of installed packages and their versions to the remote Boost API, so it returns only version-specific documentation for the user's circumstance. You should pass an array of packages to filter on if you know you need docs for particular packages.
- Search the documentation before making code changes to ensure we are taking the correct approach.
- Use multiple, broad, simple, topic-based queries at once. For example: `['rate limiting', 'routing rate limiting', 'routing']`. The most relevant results will be returned first.
- Do not add package names to queries; package information is already shared. For example, use `test resource table`, not `filament 4 test resource table`.

### Available Search Syntax

1. Simple Word Searches with auto-stemming - query=authentication - finds 'authenticate' and 'auth'.
2. Multiple Words (AND Logic) - query=rate limit - finds knowledge containing both "rate" AND "limit".
3. Quoted Phrases (Exact Position) - query="infinite scroll" - words must be adjacent and in that order.
4. Mixed Queries - query=middleware "rate limit" - "middleware" AND exact phrase "rate limit".
5. Multiple Queries - queries=["authentication", "middleware"] - ANY of these terms.

=== php rules ===

# PHP

- Always use curly braces for control structures, even for single-line bodies.

## Constructors

- Use PHP 8 constructor property promotion in `__construct()`.
    - `public function __construct(public GitHub $github) { }`
- Do not allow empty `__construct()` methods with zero parameters unless the constructor is private.

## Type Declarations

- Always use explicit return type declarations for methods and functions.
- Use appropriate PHP type hints for method parameters.

<!-- Explicit Return Types and Method Params -->
```php
protected function isAccessible(User $user, ?string $path = null): bool
{
    ...
}
```

## Enums

- Typically, keys in an Enum should be TitleCase. For example: `FavoritePerson`, `BestLake`, `Monthly`.

## Comments

- Prefer PHPDoc blocks over inline comments. Never use comments within the code itself unless the logic is exceptionally complex.

## PHPDoc Blocks

- Add useful array shape type definitions when appropriate.

=== laravel/core rules ===

# Do Things the Laravel Way

- Use `php artisan make:` commands to create new files (i.e. migrations, controllers, models, etc.). You can list available Artisan commands using the `list-artisan-commands` tool.
- If you're creating a generic PHP class, use `php artisan make:class`.
- Pass `--no-interaction` to all Artisan commands to ensure they work without user input. You should also pass the correct `--options` to ensure correct behavior.

## Database

- Always use proper Eloquent relationship methods with return type hints. Prefer relationship methods over raw queries or manual joins.
- Use Eloquent models and relationships before suggesting raw database queries.
- Avoid `DB::`; prefer `Model::query()`. Generate code that leverages Laravel's ORM capabilities rather than bypassing them.
- Generate code that prevents N+1 query problems by using eager loading.
- Use Laravel's query builder for very complex database operations.

### Model Creation

- When creating new models, create useful factories and seeders for them too. Ask the user if they need any other things, using `list-artisan-commands` to check the available options to `php artisan make:model`.

### APIs & Eloquent Resources

- For APIs, default to using Eloquent API Resources and API versioning unless existing API routes do not, then you should follow existing application convention.

## Controllers & Validation

- Always create Form Request classes for validation rather than inline validation in controllers. Include both validation rules and custom error messages.
- Check sibling Form Requests to see if the application uses array or string based validation rules.

## Authentication & Authorization

- Use Laravel's built-in authentication and authorization features (gates, policies, Sanctum, etc.).

## URL Generation

- When generating links to other pages, prefer named routes and the `route()` function.

## Queues

- Use queued jobs for time-consuming operations with the `ShouldQueue` interface.

## Configuration

- Use environment variables only in configuration files - never use the `env()` function directly outside of config files. Always use `config('app.name')`, not `env('APP_NAME')`.

## Testing

- When creating models for tests, use the factories for the models. Check if the factory has custom states that can be used before manually setting up the model.
- Faker: Use methods such as `$this->faker->word()` or `fake()->randomDigit()`. Follow existing conventions whether to use `$this->faker` or `fake()`.
- When creating tests, make use of `php artisan make:test [options] {name}` to create a feature test, and pass `--unit` to create a unit test. Most tests should be feature tests.

## Vite Error

- If you receive an "Illuminate\Foundation\ViteException: Unable to locate file in Vite manifest" error, you can run `npm run build` or ask the user to run `npm run dev` or `composer run dev`.

=== laravel/v11 rules ===

# Laravel 11

- CRITICAL: ALWAYS use `search-docs` tool for version-specific Laravel documentation and updated code examples.
- Laravel 11 brought a new streamlined file structure which this project now uses.

## Laravel 11 Structure

- In Laravel 11, middleware are no longer registered in `app/Http/Kernel.php`.
- Middleware are configured declaratively in `bootstrap/app.php` using `Application::configure()->withMiddleware()`.
- `bootstrap/app.php` is the file to register middleware, exceptions, and routing files.
- `bootstrap/providers.php` contains application specific service providers.
- No app\Console\Kernel.php - use `bootstrap/app.php` or `routes/console.php` for console configuration.
- Commands auto-register - files in `app/Console/Commands/` are automatically available and do not require manual registration.

## Database

- When modifying a column, the migration must include all of the attributes that were previously defined on the column. Otherwise, they will be dropped and lost.
- Laravel 11 allows limiting eagerly loaded records natively, without external packages: `$query->latest()->limit(10);`.

### Models

- Casts can and likely should be set in a `casts()` method on a model rather than the `$casts` property. Follow existing conventions from other models.

## New Artisan Commands

- List Artisan commands using Boost's MCP tool, if available. New commands available in Laravel 11:
    - `php artisan make:enum`
    - `php artisan make:class`
    - `php artisan make:interface`

=== pint/core rules ===

# Laravel Pint Code Formatter

- You must run `vendor/bin/pint --dirty --format agent` before finalizing changes to ensure your code matches the project's expected style.
- Do not run `vendor/bin/pint --test --format agent`, simply run `vendor/bin/pint --format agent` to fix any formatting issues.

=== pest/core rules ===

## Pest

- This project uses Pest for testing. Create tests: `php artisan make:test --pest {name}`.
- Run tests: `php artisan test --compact` or filter: `php artisan test --compact --filter=testName`.
- Do NOT delete tests without approval.
- CRITICAL: ALWAYS use `search-docs` tool for version-specific Pest documentation and updated code examples.
- IMPORTANT: Activate `pest-testing` every time you're working with a Pest or testing-related task.

=== tailwindcss/core rules ===

# Tailwind CSS

- Always use existing Tailwind conventions; check project patterns before adding new ones.
- IMPORTANT: Always use `search-docs` tool for version-specific Tailwind CSS documentation and updated code examples. Never rely on training data.
- IMPORTANT: Activate `tailwindcss-development` every time you're working with a Tailwind CSS or styling-related task.
</laravel-boost-guidelines>

<apple-design-rules>
=== apple design rules ===

# Apple Design Rules

Every UI change in this project (Filament panels, Blade views, the POS Vue app, CSS) must follow these rules. They come from Apple's WWDC design talks. The working implementation lives in `resources/css/filament/shared/apple.css`; read it before adding styles and reuse its `--apple-*` tokens instead of inventing new values.

## Where things live

- `resources/css/filament/shared/apple.css` — the Apple layer (tokens, type, press feedback, materials, depth, focus, accessibility). Imported last by `resources/css/filament/admin/theme.css` and `resources/css/filament/customer/theme.css`.
- After any change to theme CSS run `npm run build:theme` and commit the rebuilt `public/css/filament/*/theme.css`. The panels load the built files, not the sources.

## The eight principles (use these names when you reason about a design choice)

1. **Purpose** — every element costs the user attention. Decide what not to build.
2. **Agency** — the user stays in control. Undo for slips; a confirm dialog only for destructive, irreversible actions.
3. **Responsibility** — ask only for what is needed, at the moment it is needed. Preview before money, stock or accounting postings change.
4. **Familiarity** — things that look the same behave the same and live in the same place. Break a known pattern only with proof.
5. **Flexibility** — works with mouse and finger, light and dark, left-to-right and right-to-left, every supported language.
6. **Simplicity, not minimalism** — common path first, advanced options one level deeper. Clear hierarchy through order, spacing and contrast.
7. **Craft** — no random values. Every spacing, radius, timing and colour comes from a token and can be defended.
8. **Delight** — the result of the other seven, never decoration added on top.

## Response

- Give feedback on pointer-down, not on release. Pressable controls scale to `0.97` in `100ms ease-out` (already applied to `.fi-btn`, `.fi-icon-btn`; reuse the pattern for custom controls).
- No artificial delays, debounces or timers on the input path unless they are essential.
- During a drag, slider or sheet gesture, update the UI 1:1 with the pointer the whole way through.

## Motion

- Anything the user can touch or drag uses a spring, never a fixed-duration keyframe animation, so it can be grabbed and reversed mid-flight.
- Default spring: critically damped (no bounce), response `0.3–0.4s`. Add a little bounce (damping about `0.8`) only when the gesture itself carried momentum (a flick or throw).
- On release, pass the pointer velocity into the spring and project the landing point from that velocity before choosing a snap target.
- Never block input while a transition runs. Animate from the value that is on screen now, not from the logical target.
- Enter and exit along the same path. Popovers and menus grow from the control that opened them (`transform-origin` on the trigger).
- For CSS-only state changes use `var(--apple-ease)`; animate only `transform` and `opacity`.
- At a boundary, resist progressively (rubber-band). Never stop hard.

## Materials and depth

- Top bar, sidebar header and floating panels are translucent (`backdrop-filter`) with content scrolling underneath. Put the blur on a pseudo-element so the bar does not trap fixed-position children.
- Never stack one light translucent surface on another.
- Bigger surfaces read as thicker: use `--apple-shadow-card` for cards, `--apple-shadow-popover` for menus, `--apple-shadow-sheet` for modals.
- A blocking task (modal) dims and blurs the background. A parallel, non-blocking panel uses translucency without a scrim.
- Prefer a soft hairline (`--apple-hairline`) or a fade over a hard 1px divider under floating chrome.
- Radii: controls `--apple-radius-control`, cards `--apple-radius-card`, modals and sheets `--apple-radius-sheet`.

## Typography

- Left-to-right locales use the system font stack. Persian uses the self-hosted Vazirmatn (`public/fonts/vazirmatn`); Arabic uses Cairo.
- Tracking depends on size: large headings negative (`-0.022em`), body `0`. Never one letter-spacing for all sizes.
- **Right-to-left scripts: letter-spacing must be `0` and `text-transform: uppercase` must not be used.** Arabic-script letters join to each other and tracking cuts the joins.
- Build hierarchy from weight, size and leading together. Use `rem`/`em`, never fixed pixels, so the user's text-size setting is respected.
- Numbers in tables use `font-variant-numeric: tabular-nums`.

## Layout and right-to-left

- Use logical properties and utilities only: `ms-*`, `me-*`, `ps-*`, `pe-*`, `start-*`, `end-*`, `border-s`, `text-start`. Never `ml-*`, `mr-*`, `left-*`, `right-*`, `text-left` in new code.
- Direction-carrying icons (arrows, chevrons) must flip in right-to-left.
- Emails, URLs, phone numbers, codes and amounts stay left-to-right inside right-to-left text.
- Touch targets are at least 44px on coarse pointers; desktop density may stay compact.

## Feedback and wording

- Four kinds of feedback: status, completion, warning, error. Validate inline, not only on submit.
- Every screen answers: where am I, where can I go, how do I get out.
- Labels are specific ("Quotations", "Stock Moves"), never vague umbrellas.
- No hard-coded user-facing strings. Every string goes through `__()` and must exist in every locale folder, including `fa`.

## Accessibility (all three are required for any new surface)

- `prefers-reduced-motion: reduce` — replace movement with a short opacity change; no scale, slide or bounce.
- `prefers-reduced-transparency: reduce` — solid backgrounds, no blur.
- `prefers-contrast: more` — solid backgrounds with a clearly visible border.
- Every interactive element has a visible `:focus-visible` state.

## Persian (fa) translation rules

- Persian is a first-class locale (`config/app.php` → `supported_locales.fa`, right-to-left). When you add or change an English string, add the Persian one in the matching `lang/fa/` file in the same change.
- Same keys, same order, placeholders (`:name`, `:count`) untouched.
- Natural Iranian business Persian. Use ی and ک (not Arabic ي and ك) and the half-space (U+200C): «می‌شود»، «گزارش‌ها»، «به‌روزرسانی».
- Fixed terms: Quotation «پیش‌فاکتور», Invoice «فاکتور», Bill «صورت‌حساب خرید», Vendor «تأمین‌کننده», Customer «مشتری», Warehouse «انبار», Journal Entry «سند حسابداری», Debit/Credit «بدهکار/بستانکار», Lead «سرنخ», Opportunity «فرصت», Time Off «مرخصی», Point of Sale «پایانه فروش», Draft «پیش‌نویس», Settings «تنظیمات».
</apple-design-rules>
