## 2024-05-24 - Prevent IDOR in ProjectController
**Vulnerability:** IDOR in implicit route model binding allows users to view/edit/delete other users' projects
**Learning:** Implicit route binding in Laravel doesn't automatically scope queries to the authenticated user unless explicitly configured or checked
**Prevention:** Always manually verify ownership (e.g. `if ($project->user_id !== auth()->id()) abort(403);`) when using route model binding for user-specific resources.
