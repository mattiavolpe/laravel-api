## 2024-05-20 - IDOR in Resource Controllers
**Vulnerability:** Insecure Direct Object Reference (IDOR) allows unauthorized users to view, edit, update, or destroy other users' resources (Projects, Types, Technologies).
**Learning:** The application uses implicit route model binding (e.g., `Project $project`) but relies on the architectural pattern of checking ownership within the controller instead of Policies. Missing these checks (`$model->user_id != auth()->id()`) creates a vulnerability.
**Prevention:** Always implement authorization checks for user-owned models in controller methods handling specific resources (show, edit, update, destroy) or implement centralized Laravel Policies.
