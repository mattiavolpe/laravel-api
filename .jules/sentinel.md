## 2024-11-20 - IDOR in Route Model Binding
**Vulnerability:** IDOR in Admin controllers (`ProjectController`) where users could access, modify, or delete projects belonging to other users.
**Learning:** Laravel's implicit route model binding retrieves the model based on the URL parameter, but does not automatically scope it to the authenticated user.
**Prevention:** Always manually enforce explicit ownership checks (e.g. `if ($model->user_id != auth()->id()) abort(403);`) on all controller methods handling user-specific resources via route model binding.
