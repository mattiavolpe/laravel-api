## 2024-05-15 - Missing Policies for Implicit Route Binding Causes IDOR
**Vulnerability:** Implicit route model binding in controllers (like `ProjectController`) allowed users to view, edit, update, and delete projects belonging to other users (IDOR) because Laravel Policies weren't implemented or checked.
**Learning:** This architecture fetches the model solely by its identifier in the URL without scoping it to the currently authenticated user's relationships or applying authorization.
**Prevention:** When not using Laravel Policies, always manually verify ownership (e.g., `if ($model->user_id != auth()->id()) abort(403);`) inside the controller method immediately after implicit binding.
