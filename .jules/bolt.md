## 2024-11-11 - Eloquent Query Builder State Mutation
**Learning:** In Laravel/Eloquent, when executing multiple terminating methods (like count(), latest()->first()) on a shared base query builder instance, the builder's state is mutated by the preceding clauses.
**Action:** Always use (clone $query) for each execution when deriving multiple results from a single base query builder to prevent state pollution.
