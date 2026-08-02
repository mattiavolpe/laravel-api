## 2024-05-24 - IDOR in ProjectController
**Vulnerability:** Missing authorization check on show, edit, update, and destroy actions.
**Learning:** Controller uses implicit route model binding without enforcing authorization to ensure the project being accessed belongs to the authenticated user.
**Prevention:** Always add authorization checks (e.g. `if ($project->user_id != auth()->id()) abort(403);`) on controller methods that act on specific resources that are bound to a specific user.
