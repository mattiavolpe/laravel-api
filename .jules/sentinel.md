## 2024-07-20 - Fix IDOR in ProjectController
**Vulnerability:** Missing authorization checks in ProjectController methods (show, edit, update, destroy) using implicit route model binding.
**Learning:** Implicit route model binding retrieves models but does not inherently enforce ownership/authorization unless explicit checks or Laravel Policies are implemented.
**Prevention:** Always implement explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when accessing resources that belong to a specific user.
