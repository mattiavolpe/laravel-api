## 2024-04-11 - [IDOR in implicitly bound routes]
**Vulnerability:** Controller methods using route model binding for user-owned models (Project, Technology, Type) lack authorization checks, leading to Insecure Direct Object Reference (IDOR).
**Learning:** Laravel's route model binding resolves the model from the DB, but without Policies or explicit checks, any authenticated user can guess the ID/slug and manipulate other users' resources.
**Prevention:** Always implement explicit authorization checks (e.g. `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when exposing routes for user-owned resources via route model binding.
