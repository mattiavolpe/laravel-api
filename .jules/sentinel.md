## 2024-05-18 - Missing Authorization (IDOR) on Project endpoints
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project's `show`, `edit`, `update`, and `destroy` endpoints. A user could view or manipulate projects belonging to another user.
**Learning:** Implicit route model binding in controllers fetches records without user scoping, exposing endpoints to IDOR if explicit ownership checks are omitted.
**Prevention:** Always implement an authorization check (e.g., `if ($project->user_id != auth()->id()) abort(403);`) on controller methods utilizing implicit route model binding or leverage Laravel Policies to enforce ownership limits.
