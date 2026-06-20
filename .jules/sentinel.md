## 2024-06-20 - IDOR in ProjectController
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project resources allowing users to read, update, and delete projects belonging to other users.
**Learning:** Implicit route model binding in Laravel controllers does not enforce ownership. Relying only on scoping in the index method does not protect show, edit, update, and destroy routes.
**Prevention:** Always implement explicit ownership checks (e.g., if ($model->user_id != auth()->id()) abort(403);) or use Laravel Policies on all routes that access or manipulate specific resources.
