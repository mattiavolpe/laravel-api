## 2024-10-02 - Missing Authorization on Implicit Route Model Binding
**Vulnerability:** IDOR in ProjectController where any authenticated user could view, edit, or delete projects belonging to other users.
**Learning:** Implicit route model binding automatically retrieves the model based on the URL parameter (e.g., slug), but it does not inherently apply user ownership checks unless explicitly defined in the route/policy or manually in the controller.
**Prevention:** Always implement explicit authorization checks (e.g., `if ($model->user_id != auth()->id()) abort(403);` or using Laravel Policies) on resources that belong to specific users.
