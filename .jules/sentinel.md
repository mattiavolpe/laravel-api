## 2023-10-24 - Prevent IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) allowed any authenticated user to view, edit, update, or delete projects belonging to other users via implicit route model binding in the `ProjectController`.
**Learning:** Laravel's route model binding retrieves the model by ID/slug but does not automatically enforce user ownership unless explicit authorization checks or policies are implemented.
**Prevention:** Always manually enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when accessing user-specific resources via route model binding.
