## 2024-06-15 - Prevent IDOR in implicit route model binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project endpoints.
**Learning:** Implicit route model binding in Laravel fetches models directly by ID or slug without enforcing ownership. Relying solely on `auth` middleware leaves endpoints vulnerable.
**Prevention:** Always implement explicit authorization checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when accessing specific resources.