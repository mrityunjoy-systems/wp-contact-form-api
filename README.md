# WP Contact Form API

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
