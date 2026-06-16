## 2024-06-16 - Prevent IDOR in ProjectController
**Vulnerability:** Implicit Route Model Binding allows users to view, edit, update, or delete any project (IDOR) by changing the project ID/slug in the URL, as ownership checks were missing.
**Learning:** Laravel's route model binding retrieves records globally. Without explicit policies or `user_id` checks, the application implicitly trusts the user with the requested resource.
**Prevention:** Always enforce authorization checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when returning resources scoped by a user.
