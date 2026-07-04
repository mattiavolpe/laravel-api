## 2024-07-04 - IDOR in Route Model Binding
**Vulnerability:** Any authenticated user can view, edit, update, or delete other users' projects due to missing authorization checks in the ProjectController.
**Learning:** Implicit route model binding automatically fetches records but does not enforce ownership. This codebase lacks global policies for projects.
**Prevention:** Always add explicit authorization checks (e.g., `if ($model->user_id !== Auth::id()) abort(403);`) or implement Laravel Policies for controllers using implicit binding.