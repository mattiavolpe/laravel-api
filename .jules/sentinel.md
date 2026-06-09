## 2024-06-09 - Insecure Direct Object Reference (IDOR) in ProjectController
**Vulnerability:** IDOR in ProjectController's show, edit, update, and destroy methods allows any authenticated user to access or modify other users' projects via route model binding.
**Learning:** Implicit route model binding in Laravel fetches models directly by ID without automatically applying user-specific scoping, bypassing intended authorizations if Policies or explicit checks are not used.
**Prevention:** Always implement explicit ownership checks (e.g., `$model->user_id != auth()->id()`) or use Laravel Policies when returning or modifying user-specific resources retrieved via route model binding.
