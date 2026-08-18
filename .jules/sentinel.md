## 2024-08-18 - Missing IDOR protection in ProjectController
**Vulnerability:** Insecure Direct Object Reference (IDOR) allowed any authenticated user to view, edit, update, or delete other users' projects via implicit route model binding.
**Learning:** Laravel's route model binding retrieves models globally by default. Without applying Policies or explicit ownership checks, controllers are vulnerable to IDOR.
**Prevention:** Always ensure that models accessed via implicit binding have explicit authorization checks against the authenticated user (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies or scopes.
