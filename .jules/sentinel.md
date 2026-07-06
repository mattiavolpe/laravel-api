## 2024-07-06 - IDOR in ProjectController
**Vulnerability:** Any authenticated user could access, modify, or delete other users' projects via implicit route model binding without ownership validation.
**Learning:** Implicit route model binding does not automatically scope queries to the authenticated user, leading to Insecure Direct Object Reference (IDOR) vulnerabilities if explicit authorization checks are omitted.
**Prevention:** Always implement explicit authorization checks (e.g., `if ($model->user_id !== auth()->id()) abort(403);`) or use Laravel Policies for controller methods handling user-specific resources.
