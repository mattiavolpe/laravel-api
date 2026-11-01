## 2024-05-24 - Implicit Route Model Binding IDOR
**Vulnerability:** Insecure Direct Object Reference (IDOR) in ProjectController. Users could view, edit, update, or delete other users' projects by guessing their IDs.
**Learning:** Laravel's implicit route model binding automatically retrieves the model based on the ID in the route, but it doesn't automatically check if the currently authenticated user owns that model.
**Prevention:** Always manually verify ownership (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when returning user-specific models via route model binding.
