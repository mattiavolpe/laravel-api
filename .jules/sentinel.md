## 2024-09-11 - IDOR in Route Model Binding
**Vulnerability:** Implicit route model binding in controllers like ProjectController allowed users to access, modify, and delete resources belonging to other users (IDOR) because ownership checks were missing.
**Learning:** While Laravel's implicit route model binding is convenient, it retrieves the model globally without scoping it to the currently authenticated user by default.
**Prevention:** Always manually enforce ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) in controller methods, or use Laravel Policies or route model binding scoping (e.g., `$user->projects()`) to restrict access.
