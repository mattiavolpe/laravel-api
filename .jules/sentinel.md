## 2024-10-04 - Fix IDOR in Project Controller
**Vulnerability:** Missing authorization checks in ProjectController allowed any authenticated user to access, edit, update, or delete other users' projects by guessing the slug or ID.
**Learning:** Implicit route model binding in Laravel does not automatically enforce ownership constraints for user-specific resources unless explicitly scoped or verified in the controller/policies.
**Prevention:** Always manually verify ownership (e.g., using `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies for user-specific models rather than relying solely on route authentication.
