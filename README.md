# CRUST_AND_CRUMB_BAKERY
Acquiring and ordering fresh staffs
# Crust & Crumb Bakery

A warm, mobile-first bakery storefront foundation built for XAMPP with PHP, MySQL, semantic HTML, CSS, and vanilla JavaScript. The first vertical slice connects the customer-facing experience to JSON APIs and an importable database schema.

## Included in this phase

- Responsive storefront with intuitive navigation and clear calls to action
- Fresh Today board with database-backed API and quantity-aware availability
- Product catalogue with search, category filtering, and dietary filters
- Local cart interactions with server-ready product IDs and prices
- Sign-in modal wired to a secure PHP session login endpoint
- Social proof, bakery story, celebration quote CTA, and accessible labels
- PDO configuration with prepared statements
- MySQL schema for users, roles, products, categories, ingredients, allergens, Fresh Today, pickup slots, orders, cake quotes, and catering quotes
- Basic Apache security headers and protected environment/schema files

## XAMPP setup on Windows

1. Copy this folder to `C:\xampp\htdocs\crust-and-crumb`.
2. Start Apache and MySQL from the XAMPP Control Panel.
3. Open phpMyAdmin at `http://localhost/phpmyadmin`.
4. Import `database/schema.sql`.
5. Open `http://localhost/crust-and-crumb/`.

The root `.htaccess` points requests to `public/index.php`. API requests are kept outside the public directory and consumed by the storefront with relative paths.

## Configuration

Copy `.env.example` to `.env` for reference. The PDO configuration uses standard local XAMPP defaults: host `127.0.0.1`, database `crust_and_crumb`, user `root`, and an empty password. For production, provide environment variables through the host and never commit credentials.

## API endpoints

- `GET /api/products/index.php` - active catalogue, optional `category` and `search` query parameters
- `GET /api/fresh-today/index.php` - today's fresh batches
- `POST /api/auth/login.php` - JSON `{ "email": "...", "password": "..." }`

The storefront has graceful demo fallback data when the API/database is unavailable, but production ordering must use server-validated prices, stock, and totals. Cart persistence is currently local browser state; order creation, checkout validation, pickup capacity transactions, registration, admin CRUD, and quote workflows are the next implementation slices.

## Structure

```text
public/       customer storefront and assets
api/          JSON endpoints
config/       PDO/database configuration
includes/     reusable response and security helpers
database/     importable schema and seed data
uploads/      future validated quote image uploads
```

## Security notes

Passwords are stored as PHP password hashes and checked with `password_verify()`. API SQL uses PDO prepared statements. Add CSRF tokens to state-changing browser requests before production deployment, validate uploaded MIME types and size limits, use HTTPS, and add role middleware before exposing staff/admin routes.
