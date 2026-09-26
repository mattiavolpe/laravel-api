## 2024-09-26 - Missing Route Model Binding Authorization
**Vulnerability:** IDOR in ProjectController where any authenticated user could view, edit, or delete projects belonging to other users.
**Learning:** The application uses implicit route model binding (e.g., `Project $project`) but lacks a centralized policy or middleware to verify ownership.
**Prevention:** Always manually enforce authorization checks (e.g., `if ($project->user_id !== auth()->id()) abort(403);`) on user-specific resources when explicit policies are absent, avoiding strict checks on global taxonomies.
