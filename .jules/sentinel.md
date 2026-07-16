## 2024-07-16 - Prevent Insecure Direct Object Reference (IDOR) in ProjectController
**Vulnerability:** Missing authorization checks in ProjectController methods (show, edit, update, destroy) allowed any authenticated user to view, modify, or delete projects belonging to other users via IDOR.
**Learning:** Implicit route model binding in Laravel retrieves the model based on the URL parameter but does not automatically scope it to the currently authenticated user without explicit policies or manual checks.
**Prevention:** Always implement explicit ownership checks (e.g., `if ($model->user_id !== auth()->id()) abort(403);`) or use Laravel Policies when accessing resources via route model binding.
