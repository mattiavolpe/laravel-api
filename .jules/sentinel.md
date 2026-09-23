## 2024-11-20 - Fix IDOR in ProjectController
**Vulnerability:** Insecure Direct Object Reference (IDOR) where users could view, edit, update, or delete projects belonging to other users because implicit route model binding was used without checking if the authenticated user actually owns the project.
**Learning:** In Laravel controllers using implicit route model binding for user-specific resources, we must explicitly verify ownership if policies are not utilized or if strict user ownership authorization is necessary for the resource.
**Prevention:** Always ensure that authorization checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) are in place for methods that access, modify, or delete user-specific models when using route model binding.
