## 2024-09-12 - Prevent IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) allowed any authenticated user to view, edit, or delete any project by modifying the project ID or slug in the URL, as route model binding did not check ownership.
**Learning:** Implicit route model binding in Laravel does not automatically enforce user ownership. For user-specific resources, manual authorization checks must be added to controller methods that perform actions on a specific model instance.
**Prevention:** Always enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies/Gates for user-specific resources accessed via route model binding.
