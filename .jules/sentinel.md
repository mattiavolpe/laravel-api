## 2026-06-27 - Fix IDOR and Stored XSS
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `ProjectController` and Stored XSS via unvalidated URL attributes in `repositoryUrl`.
**Learning:** Implicit route binding without policies allows unauthorized access to models. Unvalidated input rendered in HTML attributes like `href` causes XSS.
**Prevention:** Use explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or Laravel Policies. Strictly validate user inputs used in URLs with the `url` validation rule.