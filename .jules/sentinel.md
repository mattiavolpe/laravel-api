## 2024-06-01 - Fix Stored XSS in Project Repository URL
**Vulnerability:** The `repositoryUrl` input was passed directly from `$request` to the database without validation and displayed in an `href` attribute, allowing Stored XSS via `javascript:` URIs.
**Learning:** Directly accessing `$request['field']` bypasses FormRequest validation. This is especially dangerous for URLs rendered in `href` attributes.
**Prevention:** Always retrieve form data exclusively using `$request->validated()`. Ensure explicitly defined `url` validation rules in FormRequests for user inputs used as HTML attributes.