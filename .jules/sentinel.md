## 2024-05-24 - Missing Authorization Check in ProjectController
**Vulnerability:** IDOR in ProjectController where users could access, edit, update, and delete other users' projects via route parameters.
**Learning:** Implicit route model binding in Laravel does not automatically enforce user ownership authorization for models that belong to users.
**Prevention:** Always manually enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when dealing with user-specific resources accessed via route model binding.
