## 2024-05-24 - IDOR via Implicit Route Model Binding
**Vulnerability:** IDOR in ProjectController where any authenticated user could view, edit, update, or delete other users' projects.
**Learning:** Implicit route model binding in Laravel fetches the model by ID without automatically applying user ownership scopes, leading to missing authorization checks in resource methods like show, edit, update, and destroy.
**Prevention:** Always manually enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) on user-specific resources when using implicit route model binding.
