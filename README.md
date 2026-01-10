## How to Test

1. Install the plugin in WordPress.
2. Activate the plugin.
3. Send a POST request to:

/wp-json/contact/v1/submit

### Example using Postman:
- Method: POST
- Body (JSON):
```json
{
  "name": "Test User",
  "email": "test@example.com",
  "message": "Hello from API"
}# WP Contact Form API

A WordPress plugin that accepts contact form data via REST API.

## API Endpoint

POST request:

### Example Body
```json
{
  "name": "John",
  "email": "john@example.com",
  "message": "Hello!"
}
{
  "status": "success",
  "message": "Form submitted successfully!"
}
