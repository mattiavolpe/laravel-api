## 2024-09-27 - IDOR in Project Controller
**Vulnerability:** Implicit route model binding in ProjectController didn't check user ownership, allowing any authenticated user to view, edit, update, or delete other users' projects (IDOR).
**Learning:** Laravel's implicit route model binding automatically resolves the model but doesn't apply authorization policies by default, leading to missing ownership checks on user-specific resources.
**Prevention:** Always manually enforce ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) on terminating actions (show, edit, update, destroy) when using implicit model binding for user-specific resources, or use Laravel Policies.
