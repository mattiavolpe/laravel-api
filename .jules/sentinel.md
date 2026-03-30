## 2025-01-20 - Fix IDOR (Missing Authorization Checks) in Admin Controllers
**Vulnerability:** Admin controllers (`ProjectController`, `TypeController`, `TechnologyController`) lacked authorization checks in methods (`show`, `edit`, `update`, `destroy`) that accepted bound models, allowing users to view and modify other users' resources via IDOR.
**Learning:** Laravel implicit route model binding automatically fetches the model by its ID or slug but does not inherently enforce that the authenticated user owns it unless explicitly checked or handled via Policies.
**Prevention:** Always verify ownership (e.g., `if ($model->user_id !== Auth::id()) { abort(403); }`) or implement robust Laravel Policies for bound models in controllers handling user-specific data.
